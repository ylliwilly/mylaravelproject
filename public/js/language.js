function googleTranslateElementInit() {
  new google.translate.TranslateElement({
      pageLanguage: 'zh-TW',
      autoDisplay: false,
      includedLanguages: 'zh-TW,zh-CN,en,ja,ko',
      layout: google.translate.TranslateElement.InlineLayout.VERTICAL
  }, 'google_translate_element');
}

$(window).load(function() {
  $('.goog-te-gadget').html($('.goog-te-gadget *'));
});

$(function(){
  $('.selectpicker').selectpicker(); /*bootstrap*/
});

function goTranslate(lang) {
  console.log(lang);
  $('.goog-te-combo').val(lang);

  // 如果選擇了原文，清空翻譯
  if (lang === 'zh-TW') {
    // 直接觸發 Google 翻譯的清除翻譯
    location.reload();
    return;
  }
  const triggerEvent = (element, eventName) => {
      const event = new Event(eventName);
      element.dispatchEvent(event);
  };
  triggerEvent(document.querySelector('.goog-te-combo'), 'change');
}