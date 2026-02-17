const liveSearch = () => {
    const input = document.getElementById('live-search-input')
    const resultsBox = document.getElementById('live-search-results')

    let timer = null

    input.addEventListener('input', () => {

        clearTimeout(timer)

        const query = input.value.trim()

        if (query.length < 2) {
            resultsBox.innerHTML = ''
            resultsBox.classList.remove('active')
            return
        }

        timer = setTimeout(() => {

            fetch(`/wp-json/agrobioprom/v1/search?q=${encodeURIComponent(query)}`)
                .then(res => res.json())
                .then(data => {

                    const hasResults =
                        data.products.length ||
                        data.news.length ||
                        data.articles.length

                    if (!hasResults) {
                        resultsBox.innerHTML = `<div class="no-results">Ничего не найдено</div>`
                        resultsBox.classList.add('active')
                        return
                    }

                    let html = ''

                    if (data.products.length) {
                        html += renderGroup('Продукты', data.products)
                    }

                    if (data.news.length) {
                        html += renderGroup('Новости', data.news)
                    }

                    if (data.articles.length) {
                        html += renderGroup('Статьи', data.articles)
                    }

                    resultsBox.innerHTML = html
                    resultsBox.classList.add('active')
                })

        }, 300)
    })

    function renderGroup(title, items) {
        return `
            <div class="search-group">
                <div class="search-group-title">${title}</div>
                ${items.map(item => `
                    <a href="${item.link}" class="search-item">
                        ${item.title}
                    </a>
                `).join('')}
            </div>
        `
    }

    document.addEventListener('click', (e) => {
        if (!e.target.closest('.header-search')) {
            resultsBox.classList.remove('active')
        }
    })
}

export default liveSearch