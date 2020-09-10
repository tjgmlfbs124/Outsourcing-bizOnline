function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function CommasToNumber(str) {
    str = String(str);
    return str.replace(/[^\d]+/g, '');
}
