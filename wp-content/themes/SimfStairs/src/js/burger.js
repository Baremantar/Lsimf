function burger() {
    if (document.getElementsByClassName('mobile_wrapper').length != 0) {
        document.getElementsByClassName('burger')[0].addEventListener('click', (event) => {
            if (event.target.localName == 'div') {
                event.target.classList.toggle('active')
                document.getElementsByClassName('mobile_wrapper')[0].classList.toggle('active')
            } else {
                event.target.parentElement.classList.toggle('active')
                document.getElementsByClassName('mobile_wrapper')[0].classList.toggle('active')
            }
        })
    }

}

export default burger();