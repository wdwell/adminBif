/*document.addEventListener("DOMContentLoaded", () => {
  // Получаем элементы
  const addFile = document.getElementById("addFile");
  const fileInput = document.getElementById("fileInput");
  const fileText = document.querySelector(".custom_Imput__fileText");
  const beforeElement = document.querySelector(".before");

  // Обработчик клика по элементу с id "addFile"
  addFile.addEventListener("click", () => {
    // Запускаем клик на скрытом input[type="file"]
    fileInput.click();
  });

  // Обработчик изменения значения input[type="file"]
  fileInput.addEventListener("change", () => {
    // Получаем выбранный файл
    const selectedFile = fileInput.files[0];

    if (selectedFile) {
      // Изменяем текст на иконку документа и название файла
      fileText.textContent = selectedFile.name;
      fileText.insertAdjacentHTML(
        "beforebegin",
        '<i class="document-icon"></i>'
      );
    } else {
      // Если файл не выбран, восстанавливаем значения по умолчанию
      fileText.textContent = "Выберите файл";
      const documentIcon = document.querySelector(".document-icon");
      if (documentIcon) {
        documentIcon.remove();
      }
    }
  });

  // Обработчик клика по элементу с классом "before"
  beforeElement.addEventListener("click", () => {
    // Сбрасываем значение input[type="file"]
    fileInput.value = "";

    // Восстанавливаем значения по умолчанию
    fileText.textContent = "Выберите файл";
    const documentIcon = document.querySelector(".document-icon");
    if (documentIcon) {
      documentIcon.remove();
    }
  });
});
*/
