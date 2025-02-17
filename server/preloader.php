<?PHP
?>

<style>
.preloader {
  /* position: fixed; */
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #f5f5f900;
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
}
.loader {
  border: 5px solid #3498db;
  border-top: 5px solid #f5f5f5;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 2s linear infinite;
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>

<div class="preloader">
<div class="loader"></div>
</div>

 <script>
window.addEventListener("load", () => {
  const preloader = document.querySelector(".preloader");
  preloader.style.display = "none";
});

 </script>

