document.getElementById("kill").onclick = function(){
    location.href = "../index.html";
};

const btn = document.getElementById('fobtn');

btn.addEventListener('click', function handleClick() {
    const initialText = 'Follow';

    if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
      btn.textContent = 'Following';
    } else {
      btn.textContent = initialText;
    }
});

const btn2 = document.getElementById('fobtn2');

btn2.addEventListener('click', function handleClick() {
    const initialText = 'Follow';

    if (btn2.textContent.toLowerCase().includes(initialText.toLowerCase())) {
      btn2.textContent = 'Following';
    } else {
      btn2.textContent = initialText;
    }
});