function pushNotify(message, type) {
    new Notify({
        status: type,
        title: message,
        effect: 'fade',
        speed: 300,
        customIcon: "<i class='fa-solid fa-circle-check'></i>",
        showIcon: true,
        showCloseButton: true,
        autoclose: true,
        autotimeout: 5000,
        type: 3,
        position: 'right top'
    })
}