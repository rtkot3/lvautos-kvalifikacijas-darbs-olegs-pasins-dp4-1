function updateModels(value) {

    let request = new XMLHttpRequest();

    request.open("GET", "functions/get_data?model=" + value.selectedOptions[0].value);

    request.send();

    request.onload = () => {

        let model = document.querySelector('#models');
        
        model.disabled = false;
        model.innerHTML = '<option value="" disabled selected>- Modelis -</option>' + request.response;
        
    }

}