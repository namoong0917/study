# 프로젝트 구조 (React + Vite)

- public : 웹서버가 호스팅하는 홈 폴더
- src : 소스 코드 파일이 존재하는 폴더

## Virtual Dom (가상 돔) 이란?

- 리엑트는 웹브라우저의 DOM 구조와 동일한 가상의 DOM 구조를 메모리에 만들어 둠
- 어떤 컴포넌트가 새롭게 렌더링될 때 컴포넌트가 만든 것을 가상 DOM과 비교해서 변경된 DOM에 해당되는 실제 웹브라우저의 DOM만을 업데이트함
- 결국 웹브라우저에서는 불필요한 DOM 업데이트 없이 변경된 DOM 만을 업데이트하여 화면 렌더링 속도를 최적화 시킴

<br>

### ✅컴포넌트 렌더링

React에서 어떤 컴포넌트가 렌더링 된다는 의미는 컴포넌트에 대한 함수의 실행과 같다.<br>(컴포넌트 렌더링 = 컴포넌트에 대한 함수의 실행)

<b>리컨실리에이션(Reconciliation)</b> : Virtual DOM에서 변경된 부분만 실제 DOM에 반영하는 과정

<br>

## Component (컴포넌트)

- 재사용 가능한 UI의 기본 구성 단위로 컴포넌트들을 조합하여 하나의 웹 어플리케이션을 만들 수 있음
- HTML 관점에서 본다면 사용자 정의 TAG를 의미함
- 컴포넌트 개발은 함수와 클래스로 가능하며 함수 방식이 많이 쓰인다.

```javascript
// 함수로 만든 컴포넌트
function Welcom(props) {
  return <h1>Hello, {props.name}</h1>;
}

// 클래스로 만든 컴포넌트
import React from "react";

class Welcome extends React.Component {
  render() {
    return <h1>Hello, {this.props.name}</h1>;
  }
}
```
