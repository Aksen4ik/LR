var win = window.open('https://google.com/', 'google', "width=200,height=200");

win.document.write(`<script>setTimeout(() => {
  window.close()
}, 5000);</script>`)