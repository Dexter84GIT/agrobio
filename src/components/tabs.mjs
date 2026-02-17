const tabs = () => {
    const wrappers = document.querySelectorAll('.tabs')
    if (!wrappers.length) return

    wrappers.forEach(wrapper => {
        const controls = Array.from(wrapper.querySelectorAll('.tab'))
        const contents = Array.from(wrapper.querySelectorAll('.tab-content'))
        const contentWrapper = wrapper.querySelector('.tabs-content')

        if (!contentWrapper) return

        const getActive = () =>
            contents.find(c => c.classList.contains('active'))

        wrapper.addEventListener('click', (e) => {
            const tab = e.target.closest('.tab')
            if (!tab) return

            document.activeElement?.blur()

            const scrollY = window.scrollY

            const index = controls.indexOf(tab)
            if (index === -1) return

            const current = getActive()
            const next = contents[index]
            if (current === next) return

            const startHeight = current ? current.offsetHeight : 0
            contentWrapper.style.height = `${startHeight}px`

            controls.forEach(t => t.classList.remove('active'))
            contents.forEach(c => c.classList.remove('active'))

            tab.classList.add('active')
            next.classList.add('active')

            requestAnimationFrame(() => {
                const nextHeight = next.offsetHeight
                contentWrapper.style.height = `${nextHeight}px`

                window.scrollTo(0, scrollY)
            })

            const onEnd = () => {
                contentWrapper.style.height = 'auto'
                contentWrapper.removeEventListener('transitionend', onEnd)
            }

            contentWrapper.addEventListener('transitionend', onEnd)
        })
    })
}

export default tabs
