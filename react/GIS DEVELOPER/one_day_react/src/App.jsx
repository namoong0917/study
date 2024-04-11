import "./App.css";

// 컴포넌트는 별도의 소스파일에 작성하는게 일반적인데 보여주기로 이 컴포넌트 소스 파일에서 작성
function Welcom(props) {
  return <h1>Hello, {props.name}</h1>;
}

function App() {
  const time = new Date().toLocaleTimeString();

  return (
    <>
      <h1>{time}</h1>
      <Welcom name="홍길동" />
    </>
  );
}

export default App;
