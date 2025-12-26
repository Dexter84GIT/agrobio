const select = () => {
    const wrapper = document.getElementById('vet')
    const wraps = wrapper.querySelectorAll('.select')
    const resetBtn = wrapper.querySelector('.reset')
    const closeAll = except => {
        wraps.forEach(wrap => {
            if (wrap !== except) wrap.classList.remove('open')
        })
    }
    const resetAll = () => {
        console.log('reset');

        wraps.forEach(wrap => {
            const input = wrap.querySelector('input[type="hidden"]')
            input.value = ''
        })
    }

    wraps.forEach(wrap => {
        const toggle = wrap.querySelector('.toggle')
        const valueEl = wrap.querySelector('.value')
        const input = wrap.querySelector('input[type="hidden"]')
        const options = wrap.querySelectorAll('.option')

        const send = wrap.querySelector('.send')

        const resetAll = () => {
            input.value = null
            valueEl.textContent = 'Выберите значение'
            options.forEach(o => o.classList.remove('active'))
        }

        toggle.addEventListener('click', e => {
            e.stopPropagation()
            const open = wrap.classList.contains('open')
            closeAll(wrap)
            if (!open) wrap.classList.add('open')
        })

        options.forEach(opt => {
            opt.addEventListener('click', e => {
                e.stopPropagation()
                const val = opt.dataset.value || ''
                const text = opt.textContent.trim()

                input.value = val
                valueEl.textContent = text

                options.forEach(o => o.classList.remove('active'))
                opt.classList.add('active')

                wrap.classList.remove('open')
            })
            resetBtn.addEventListener('click', (e) => {
                e.preventDefault()
                resetAll()
            })
        })
    })


    document.addEventListener('click', () => closeAll(null))


}

export default select