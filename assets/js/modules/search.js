function searchFilter() {
  const formSearch = document.querySelector("#formSearch");

  if (!formSearch) return;
  const inputRadio = formSearch.querySelectorAll('input[type="radio"]');
  const inputSearch = formSearch.querySelector('input[type="search"]');

  const getResultFromApi = (formData) => {
    const postsCount = document.getElementById("postsCount");
    const postsWrapper = document.getElementById("postsWrapper");

    if (!inputRadio || !inputSearch) return;

    jQuery(($) => {
      $.ajax({
        type: "POST",
        url: restDetails.url + "cyn-api/v1/search",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: (res) => {
          postsCount.innerHTML = res.found_posts;
          postsWrapper.innerHTML = res.html;
        },
      });
    });
  };

  inputRadio.forEach((element) => {
    element.addEventListener("click", (event) => {
      const formData = new FormData(formSearch);
      getResultFromApi(formData);
    });
  });

  inputSearch.addEventListener("keyup", () => {
    const formData = new FormData(formSearch);
    getResultFromApi(formData);
  });
}

searchFilter();
