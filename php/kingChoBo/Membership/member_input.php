<?php

// print_r($_POST);

if(!isset($_POST['chk']) or $_POST['chk'] != 1) {
	die("<script>
		alert('약관 등을 동의하시고 접근하시기 바랍니다.');
		self.location.href='./stipulation.php'
		</script>
	");
}

include 'inc_header.php'
?>

<main class="w-50 mx-auto border rounded-5 p-5">
	<h2 class="text-center fw-bold">회원가입</h2>

	<div class="d-flex gap-2 align-items-end">
		<div class="flex-grow-1">
			<label for="f_id" class="form-label fw-bolder">아이디</label>
			<input placeholder="아이디를 입력해 주세요." type="text" class="form-control fs-6" id="f_id" aria-describedby="아이디 입력란">
		</div>
		<button class="btn btn-secondary">아이디 중복확인</button>
	</div>

	<div class="d-flex mt-3 gap-2 justify-content between">
		<div class="w-50">
			<label for="f_password" class="form-label fw-bolder">비밀번호</label>
			<input placeholder="비밀번호를 입력해 주세요." type="password" class="form-control flex-grow-2" id="f_password"
				aria-describedby="비밀번호 입력란">
		</div>
		<div class="w-50">
			<label for="f_password2" class="form-label fw-bolder">비밀번호 확인</label>
			<input placeholder="비밀번호를 입력해 주세요." type="password" class="form-control" id="f_password2"
				aria-describedby="비밀번호 입력란">
		</div>
	</div>

	<div class="d-flex mt-3 gap-2 align-items-end">
		<div class="flex-grow-1">
			<label for="f_id" class="form-label fw-bolder">이메일</label>
			<input placeholder="이메일을 입력해 주세요." type="text" class="form-control" id="f_id" aria-describedby="이메일 입력란">
		</div>
		<button class="btn btn-secondary">이메일 중복확인</button>
	</div>

	<div class="d-flex mt-3 align-items-end gap-2">
		<div>
			<label for="f_zipcode">우편번호</label>
			<input type="text" name="zipcode" id="zipcode" class="form-control" maxlength="5" minlength="5">
		</div>
		<button class="btn btn-secondary">우편번호 찾기</button>
	</div>

	<div class="d-flex mt-3 gap-2 justify-content between">
		<div class="w-50">
			<label for="f_addr1" class="form-label fw-bolder">주소</label>
			<input placeholder="" type="text" class="form-control flex-grow-2" id="f_addr1" aria-describedby="주소">
		</div>
		<div class="w-50">
			<label for="f_addr2" class="form-label fw-bolder">상세 주소</label>
			<input placeholder="상세주소를 입력해 주세요." type="text" class="form-control" id="f_addr2" aria-describedby="살세 주소">
		</div>
	</div>

	<div class="mt-3 d-flex gap-5">
		<div><input class="form-control" type="file" name="profile" form="form-control"></div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 w-25">
			<path fill-rule="evenodd"
				d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0Zm-5-2a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM8 9c-1.825 0-3.422.977-4.295 2.437A5.49 5.49 0 0 0 8 13.5a5.49 5.49 0 0 0 4.294-2.063A4.997 4.997 0 0 0 8 9Z"
				clip-rule="evenodd" />
		</svg>
	</div>

	<div class="mt-3 d-flex gap-2">
		<button class="btn btn-primary w-50">가입확인</button>
		<button class="btn btn-secondary w-50">가입취소</button>
	</div>
</main>

<?php
include 'inc_footer.php'
?>