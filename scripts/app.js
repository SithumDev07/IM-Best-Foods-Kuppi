
const foodsContainer = document.querySelector('.foods')

foods.forEach((item, index) => {
    const foodCard = document.createElement('div');
    foodCard.classList.add('food-card')
    foodCard.innerHTML = `
        <img src="${item.image}" alt="Food Items" />
        <h3>${item.name}</h3>
        <p>With ${item.ingredients}</p>
        <p class="price">Rs.${item.price}</p>
    `;
    foodsContainer.appendChild(foodCard)
})
