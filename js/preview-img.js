    /**
     * Previewing Image Before File Upload
     * @type {HTMLElement}
     */
    const inpFile = document.getElementById("uploadImage");
    const previewContainer =  document.getElementById('preview');
    const previewImage = previewContainer.querySelector(".image-preview__image");


    inpFile.addEventListener("change", function () {
        const file = this.files[0];
        if (file){
            const reader =  new FileReader();//gonna be reading the const file as a data url file

            /*previewDefaultText.style.display = "none";*/
            previewImage.style.display = "block";

            reader.addEventListener("load", function () {
                console.log(this);
                previewImage.setAttribute("src", this.result);
            })
            reader.readAsDataURL(file);
        }else{
            previewImage.style.display = "none";
            previewImage.setAttribute("src","");
        }
    });
