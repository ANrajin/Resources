>> Incremental Counter
```
let start = 0;

let end = 100;

let increment = end > start ? 1 : -1;

let timer = setInterval(function(){
    if (start == end) clearInterval(timer);

    //inject value into html
    $(".progress-bar").attr("aria-valuenow", start);
    $(".progress-bar").next("span").text(`${start}%`);

    start += increment;
}, 50);

//increase/decrease progress bar width
$("body").find(".progress-bar").css({width: `${end}%`});
```

---

>> Restrict alphabet keys in input type text

```
function validateNumber(event) {
    const keyCode = event.keyCode;

    const excludedKeys = [8, 37, 39, 46];

    if (!((keyCode >= 48 && keyCode <= 57) ||
        (keyCode >= 96 && keyCode <= 105) ||
        (excludedKeys.includes(keyCode)))) {
        event.preventDefault();
    }
}
```
---
>> 