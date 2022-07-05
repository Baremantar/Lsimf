import "slick-carousel";
import $ from "jquery";
import Inputmask from "inputmask";
import burger from './burger.js';

window.onload = () =>{
  console.log("Document load and parsed");
  $(".carousel").slick({
    autoplay: true,
    arrows: false,
    autoplaySpeed: 3000,
    draggable: false,
  });

  if (document.getElementsByTagName("figure")) {
    Array.from(document.getElementsByTagName("figure")).forEach((element) => {
      element.children[0].dataset.image = "";
    });
    document.addEventListener("click", (element) => {
      let el = element.target;
      if (el.dataset.image == "") {
          let imgPath = el.src;
          document.getElementsByClassName('popup_content')[0].children[0].src = imgPath;
          document.getElementsByClassName('popup')[0].classList.toggle('active')
      }
      if (el.classList.contains('popup_background')) {
        document.getElementsByClassName('popup')[0].classList.toggle('active')
      }
    });
  }


  if (document.getElementById("form")) {
    const form = document.getElementById("form");
    const phone = Inputmask({"mask": "8(999) 999-99-99"}).mask('#phone');
    const text = Inputmask().mask('#text');
    const email = Inputmask().mask('#email');
    const name = Inputmask({regex: "^[а-яА-Я]*$","placeholder": "Имя*",}).mask('#name');

    submit()
    
    function submit() {

      form.querySelector('#submit').addEventListener('click', () => {
        Array.from(form.getElementsByTagName('input')).forEach((element) => {
          element.classList.add('valid');
        })
      })
      
      form.addEventListener('submit', (e) => {
        e.preventDefault()
        
        
        if (name.undoValue != '' && phone.undoValue != '' && text.undoValue != ''&& email.undoValue != ''){

          data.name = name.undoValue;
          data.phone = phone.undoValue;
          data.text = text.undoValue;
          email.text = email.undoValue;

          xhr.open('POST', '../../mail.php',[true, data])
          xhr.send([JSON.stringify(data)]);
          document.getElementsByClassName('modal')[0].classList.add('active')
        }
      });
    }

  }
burger;
};
