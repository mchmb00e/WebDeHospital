function printin() {
    window.print();
}
function printinAtencion() {
    const tablePaciente = document.querySelector(".tablePaciente");
    const tableObs = document.querySelector(".obs");
    tablePaciente.style.position = "fixed";
    tableObs.style.position = "fixed";
    tablePaciente.style.opacity = "0";
    tableObs.style.opacity = "0";
    tableObs.style.left = "1500px";
    tablePaciente.style.left = "1500px";
}
function printinPaciente() {
    const tablePaciente = document.querySelector(".tableAtencion");
    const tableObs = document.querySelector(".obs");
    tablePaciente.style.position = "fixed";
    tableObs.style.position = "fixed";
    tablePaciente.style.opacity = "0";
    tableObs.style.opacity = "0";
    tableObs.style.left = "1500px";
    tablePaciente.style.left = "1500px";
}
function printinObservacion() {
    const tablePaciente = document.querySelector(".tableAtencion");
    const tableObs = document.querySelector(".tablePaciente");
    tablePaciente.style.position = "fixed";
    tableObs.style.position = "fixed";
    tablePaciente.style.opacity = "0";
    tableObs.style.opacity = "0";
    tableObs.style.left = "1500px";
    tablePaciente.style.left = "1500px";
}
function textarea() {
    const button = document.querySelector(".darkModeTextarea");
    const textarea = document.querySelector(".textarea");
    var darkmode = 0;
    if (darkmode == 0) {
        button.style.filter = "invert(100)";
        textarea.style.color = "White";
        textarea.style.backgroundColor = "Black";
        darkmode = 1;
    }
    if (darkmode == 1) {
        button.style.filter = "invert(100)";
        textarea.style.color = "Black";
        textarea.style.backgroundColor = "White";
        darkmode = 0;
    }
}