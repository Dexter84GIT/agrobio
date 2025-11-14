const tabs = () => {
    const container = document.querySelectorAll('.tabs')

    container.forEach(item => {
        const btns = item.querySelectorAll('.tab')
        const fields = item.querySelectorAll('.tab-content')

        btns.forEach((btn, index) => {
            btn.addEventListener('click', (e) => {
                btns.forEach(button => {
                    button.classList.remove('active')
                    fields.forEach(field => {
                        field.classList.remove('active')
                    })
                })
                e.target.classList.add('active');
                fields[index].classList.add('active')
            })
    })

    })
            // btns.forEach((tab, index) => {
            //     const target = e.target
            //     tab.classList.remove('active')
            //     e.target.classList.add('active')
            //     console.log((target, target.index));
                
            // })
    // btns.forEach(btn => {
    //     btn.addEventListener('click', (e) => {
    //         btns.forEach((i, index) => {
    //             i.classList.remove('active')
    //             e.target.classList.add('active')
    //             console.log(e.target);

    //         })
    //     })
    // })
}

tabs()