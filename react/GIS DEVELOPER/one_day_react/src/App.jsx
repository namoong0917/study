import "./App.css";

function App() {
  const time = new Date().toLocaleTimeString();

  return (
    <>
      <h1>{time}</h1>
    </>
  );
}

export default App;
