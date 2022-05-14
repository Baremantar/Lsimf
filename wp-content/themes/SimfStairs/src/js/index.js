import "slick-carousel";
import $ from "jquery";
import "inputmask";
import axios from "axios";

var data = {};
window.onload = () => {
  console.log("Document load and parsed");

  if (document.getElementsByClassName("carousel")) {
    $(".carousel").slick({
      autoplay: true,
      arrows: false,
      autoplaySpeed: 3000,
      draggable: false,
    });
  }

  if (document.getElementsByTagName("figure")) {
    Array.from(document.getElementsByTagName("figure")).forEach((element) => {
      element.children[0].dataset.image = "";
    });
    document.addEventListener("click", (element) => {
      let el = element.target;
      if (el.dataset.image == "") {
        let imgPath = el.src;
        document.getElementsByClassName("popup_content")[0].children[0].src =
          imgPath;
        document.getElementsByClassName("popup")[0].classList.toggle("active");
      }
      if (el.classList.contains("popup_background")) {
        document.getElementsByClassName("popup")[0].classList.toggle("active");
      }
    });
  }

  if (document.getElementById("form")) {
    const form = document.getElementById("form");
    const phone = Inputmask({ mask: "8(999) 999-99-99" }).mask(
      document.getElementById("phone")
    );
    const text = Inputmask({ regex: "^[\\s.,!?0-9а-яА-Яa-zA-Z]*$", placeholder: "Письмо*", }).mask(
      "#text"
    );
    const email = Inputmask({ regex: "^[\\s.@0-9а-яА-Яa-zA-Z]*$",placeholder: "E-mail*",}).mask("#email");
    const name = Inputmask({
      regex: "^[а-яА-Яa-zA-Z]*$",
      placeholder: "Имя*",
    }).mask("#name");

    submit();

    function submit() {
      form.querySelector("#submit").addEventListener("click", () => {
        Array.from(form.getElementsByTagName("input")).forEach((element) => {
          element.classList.add("valid");
        });
      });

      form.addEventListener("submit", (e) => {
        e.preventDefault();

        if (
          name.undoValue != "" &&
          phone.undoValue != "" &&
          text.undoValue != "" &&
          email.undoValue != ""
        ) {
          data.form = 0;
          data.name = name.undoValue;
          data.phone = phone.undoValue;
          data.text = text.undoValue;
          data.email = email.undoValue;

          axios({
            method: "post",
            url:
              window.location.origin + "/wp-content/themes/SimfStairs/mail.php",
            data: data,
            headers: {
              "Content-Type": "multipart/form-data",
            },
          });
          document.getElementById('thank').style.display = 'block';
        }
      });
    }
  }
};
