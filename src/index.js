import select from "./components/select.mjs"
import tabs from "./components/tabs.mjs"
import slider from "./components/slider.mjs"
import height from "./components/height.mjs"
import asyncVeteriniser from "./components/asyncVeteriniser.mjs"
import liveSearch from "./components/liveSearch.mjs"

document.addEventListener('DOMContentLoaded', () => {
    tabs()
    slider()
    height()
    liveSearch()
    const form = document.getElementById('veteriniser')
    if (form) {
        select()
        asyncVeteriniser(form)
    }
})

