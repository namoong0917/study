import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App.jsx";
import "./index.css";

// root DOM을 별도의 객체로 저장해두고 해당 객체를 통해서 랜더 함수를 호출 하도록 변경
const rootDom = ReactDOM.createRoot(document.getElementById("root"));

setInterval(() => {
  rootDom.render(
    <React.StrictMode>
      <App />
    </React.StrictMode>
  );
}, 1000);
