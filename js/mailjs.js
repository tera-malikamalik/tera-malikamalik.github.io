const btnKirim = document.getElementById('kirim');
const btnTunggu = document.getElementById('tunggu');
const myAlert = document.querySelector('.my-alert');
const form = document.getElementById('email-form');
document.getElementById('email-form').addEventListener
('submit', function (event) {
    event.preventDefault();
    
    btnTunggu.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');

    const serviceID = 'service_8h17k5l';
    const templateID = 'template_x1w571i';

    emailjs.sendForm(serviceID, templateID, this).then(
        () => {
            btnKirim.classList.toggle('d-none');
            btnTunggu.classList.toggle('d-none');
            myAlert.classList.toggle('d-none');
            form.reset();
        //  alert('Email Berhasil Terkirim');
        },
        (error) => {
            btnKirim.classList.toggle('d-none');
            btnTunggu.classList.toggle('d-none');
          alert(JSON.stringify(error));
        },
      );
    
})