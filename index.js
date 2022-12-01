const optionMenu = document.querySelector(".select-menu"),
    selectBtn = optionMenu.querySelector(".select-btn"),
    options = optionMenu.querySelectorAll(".option"),
    sBtn_text = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click", () => optionMenu.classList.toggle("menu-active"));

options.forEach(option => {
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-txt").innerText;
        sBtn_text.innerText = selectedOption;
        console.log(selectedOption)
    })
}); 
