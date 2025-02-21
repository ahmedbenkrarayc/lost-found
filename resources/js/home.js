let categories = []
let annonces = []

const categoryContainer = document.getElementById('categories')
const annonceContainer = document.getElementById('annonces')

const fetchCategories = async () => {
    const response = await fetch('/category/getAll')
    const data = await response.json()
    categories = data
}

const displayCategories = () => {
    categories.forEach((item) => {
        categoryContainer.innerHTML += `
            <div class="category">${item.name}</div>
        `
    })
}

document.addEventListener('click', (e) => {
    if(e.target && e.target.classList.contains('category')){
        document.querySelectorAll('.category').forEach(item => {
            item.classList.remove('selectedcat')
        })
        e.target.classList.add('selectedcat')
    }
})

const fetchAnnonces = async () => {
    const response = await fetch('/annonce/getAll')
    const data = await response.json()
    annonces = data
}

const displayAnnonces = () => {
    annonces.forEach((item) => {
        annonceContainer.innerHTML += `
            <a class="block" href="/annonce/${item.id}">
                <img class="block object-cover w-full md:h-[400px]" src="${'/storage/'+item.cover}" alt="cover image">
                <h1 class="sm:mt-5 md:mt-8 sm:text-[22px] md:text-[26px] lg:text-[33px] font-[500]">${item.title}</h1>
                <div class="w-full h-[1.5px] sm:my-2 md:my-4 bg-[#d7d7d8]"></div>
                <div class="flex justify-between"><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">${item.category.name}</h1><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">${item.type}</h1></div>
            </a>
        `
    })
}

(async () => {
    await Promise.all([fetchCategories(), fetchAnnonces()])
    displayCategories()
    displayAnnonces()
})()