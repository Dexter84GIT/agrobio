const asyncVeteriniser = (form) => {

    if (!form) return

    form.addEventListener('submit', async (e) => {
        e.preventDefault()

        const params = new URLSearchParams(new FormData(form)).toString()
        const url = window.location.pathname + '?' + params

        try {
            const response = await fetch(url, {
                method: 'GET',
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })

            const html = await response.text()

            const parser = new DOMParser()
            const doc = parser.parseFromString(html, 'text/html')

            const newShowcase = doc.getElementById('showcase')
            const currentShowcase = document.getElementById('showcase')

            if (newShowcase) {
                if (currentShowcase) {
                    currentShowcase.innerHTML = newShowcase.innerHTML
                } else {
                    const section = newShowcase.cloneNode(true)
                    form.closest('section').after(section)
                }

                window.history.pushState({}, '', url + '#showcase')

                document
                    .getElementById('showcase')
                    .scrollIntoView({ behavior: 'smooth' })
            }

        } catch (err) {
            console.error(err)
        }
    })
}

export default asyncVeteriniser
