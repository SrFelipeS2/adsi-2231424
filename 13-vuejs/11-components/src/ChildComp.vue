
<template>
  <h2 class="text-center">A Child Component!</h2>
  <div class="search-box">
    <input
      type="text"
      placeholder="Search..."
      maxlength="14"
      class="font-light"
    />
    <a href="" class="icon">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
          clip-rule="evenodd"
        />
      </svg>
    </a>
  </div>
</template>
<style scoped>
div.search-box {
  background-color: #34495e;
  border-radius: 40px;
  height: 60px;
  left: 50%;
  padding: 10px;
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
}

div.search-box input {
  background: none;
  border: none;
  color: #fff;
  font-size: 1.1rem;
  line-height: 40px;
  outline: none;
  padding: 0;
  transition: 0.5s ease;
  width: 40px;
}

div.search-box:hover > input {
  padding: 0 10px;
  width: 240px;
}

div.search-box:hover > .icon {
  background: #fff;
  right: 10px;
  top: 10px;
}

a.icon:hover {
  transform: rotate(360deg) scale(1.4);
}

a.icon {
  position: absolute;
  right: 10px;
  top: 10px;
  align-items: center;
  background: #34495e;
  border-radius: 50%;
  color: #41b883;
  cursor: pointer;
  display: flex;
  justify-content: center;
  font-size: 1.3rem;
  height: 40px;
  transition: 0.4s;
  text-decoration: none;
  width: 40px;
}
</style>