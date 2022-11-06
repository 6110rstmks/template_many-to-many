
{
    const checkboxes = document.querySelectorAll('input[type=checkbox]')
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')



    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', (e) => {


            const categoryId = e.target.dataset.category
            const productId = checkbox.dataset.product
            const dropDownCategoryId = checkbox.dataset.dropdown

            console.log(categoryId)
            console.log(productId)
            console.log(dropDownCategoryId)
            fetch('/categories/' + categoryId + '/' + productId + '/' + dropDownCategoryId + '/check', {
                method: 'post',
                headers: {
                    'X-CSRF-Token': token,
                }
            })

        })
    })





    let dropBtns = document.querySelectorAll('#dropdownDefault')


    dropBtns.forEach(dropBtn => {
        dropBtn.addEventListener('click', (e) => {
            e.stopPropagation()
            e.target.nextElementSibling.classList.toggle('hidden')
        })
    })







}
