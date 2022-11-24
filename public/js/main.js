
{
    const checkboxes = document.querySelectorAll('input[type=checkbox]')
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')



    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', (e) => {


            const categoryId = e.target.dataset.category
            const productId = checkbox.dataset.product
            const dropDownCategoryId = checkbox.dataset.dropdown

            fetch('/categories/' + categoryId + '/' + productId + '/' + dropDownCategoryId + '/check', {
                method: 'post',
                headers: {
                    'X-CSRF-Token': token,
                }
            })

        })
    })




    // drop down btn
    let dropBtns = document.querySelectorAll('#dropdownDefault')


    dropBtns.forEach(dropBtn => {
        dropBtn.addEventListener('click', (e) => {
            e.stopPropagation()
            e.target.nextElementSibling.classList.toggle('hidden')
        })
    })

    // dlt btn (home page)
    const dltBtns = document.querySelectorAll('.dlt-btn')
    dltBtns.forEach(dltBtn => {
        dltBtn.addEventListener('click', (e) => {
            console.log(e)
            e.target.parentNode.submit()
        })
    })







}
