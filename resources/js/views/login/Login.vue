<template>
    <div class="container">
        <!-- 회원가입 권장 섹션 -->
        <div class="regiest-content">
            <div class="my-5 app-specific-size">
                <div class="text-center">
                    <h2 class="my-4 fw-bold">회원가입시 판매가 빨라져요</h2>
                    <p class="bold-link text-muted">소셜 로그인 및 이메일로 가입 할 수 있어요.</p>
                </div>
            </div>
            <div class="layout-container">
                <div class="banner">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="http://placehold.it/1920X720" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>슬라이드 배너 step 1</h5>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="http://placehold.it/1920X720" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>슬라이드 배너 step 2</h5>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="http://placehold.it/1920X720" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>슬라이드 배너 step 3</h5>
                        </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
                <div class="review-content">
                    <div class="apply-top text-start">
                        <h3 class="review-title">다른 사람들의 이용후기에요</h3>
                        <a href="/reviewtest" class="btn-apply">전체보기</a>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="car-imges"></div>
                                <div class="card-body">
                                    <h5 class="card-title">현대 소나타 (DN8)</h5>
                                    <div class="rating">
                                        <div v-for="index in rating" :key="'filled-' + index" class="star filled-star"></div>
                                        <div v-for="index in 5 - rating" :key="'empty-' + index" class="star empty-star"></div>
                                    </div>
                                    <div class="d-sm-flex justify-content-between text-muted">
                                        <span class="deilname">담당 딜러 홍길동님</span>
                                        <span class="date">2024-03-18</span>
                                    </div>
                                    <p class="card-text">차갑아서 보다 안 아닐 그럽시다 다급하다 떨어지어무슨 절망 아닌 자기에 달려가아 누구에 고스톱은 발생한가.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="car-imges"></div>
                                <div class="card-body">
                                    <h5 class="card-title">현대 소나타 (DN8)</h5>
                                    <div class="rating">
                                        <div v-for="index in rating" :key="'filled-' + index" class="star filled-star"></div>
                                        <div v-for="index in 5 - rating" :key="'empty-' + index" class="star empty-star"></div>
                                    </div>
                                    <div class="d-sm-flex justify-content-between text-muted">
                                        <span class="deilname">담당 딜러 홍길동님</span>
                                        <span class="date">2024-03-18</span>
                                    </div>
                                    <p class="card-text">차갑아서 보다 안 아닐 그럽시다 다급하다 떨어지어무슨 절망 아닌 자기에 달려가아 누구에 고스톱은 발생한가.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="car-imges"></div>
                                <div class="card-body">
                                    <h5 class="card-title">현대 소나타 (DN8)</h5>
                                    <div class="rating">
                                        <div v-for="index in rating" :key="'filled-' + index" class="star filled-star"></div>
                                        <div v-for="index in 5 - rating" :key="'empty-' + index" class="star empty-star"></div>
                                    </div>
                                    <div class="d-sm-flex justify-content-between text-muted">
                                        <span class="deilname">담당 딜러 홍길동님</span>
                                        <span class="date">2024-03-18</span>
                                    </div>
                                    <p class="card-text">차갑아서 보다 안 아닐 그럽시다 다급하다 떨어지어무슨 절망 아닌 자기에 달려가아 누구에 고스톱은 발생한가.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="car-imges"></div>
                                <div class="card-body">
                                    <h5 class="card-title">현대 소나타 (DN8)</h5>
                                    <div class="rating">
                                        <div v-for="index in rating" :key="'filled-' + index" class="star filled-star"></div>
                                        <div v-for="index in 5 - rating" :key="'empty-' + index" class="star empty-star"></div>
                                    </div>
                                    <div class="d-sm-flex justify-content-between text-muted">
                                        <span class="deilname">담당 딜러 홍길동님</span>
                                        <span class="date">2024-03-18</span>
                                    </div>
                                    <p class="card-text">차갑아서 보다 안 아닐 그럽시다 다급하다 떨어지어무슨 절망 아닌 자기에 달려가아 누구에 고스톱은 발생한가.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card login-card border-0">
                    <div class="card-body">
                        <!-- 로그인 폼 -->
                        <form @submit.prevent="submitLogin">
                            <div class="">
                                <div class="my-3 text-left">
                                    <router-link :to="{ path: '/' }" class="register-link text-muted ms-2">이미 위카 회원이신가요?</router-link>
                                </div>
                                <!-- 이메일 입력 -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input v-model="loginForm.email" id="email" type="email" class="form-control border-0 border-bottom" required autofocus autocomplete="username" placeholder="이메일을 입력해주세요.">
                                    <!-- 유효성 검사 오류 메시지 -->
                                    <div class="text-danger mt-1">
                                        <div v-for="message in validationErrors?.email">
                                            {{ message }}
                                        </div>
                                    </div>
                                </div>
                                <!-- 비밀번호 입력 -->
                                <div class="mb-4">
                                    <label for="password" class="form-label">
                                        {{ $t("password") }}
                                    </label>
                                    <input v-model="loginForm.password" id="password" type="password" class="form-control border-0 border-bottom" required autocomplete="current-password" placeholder="비밀번호를 입력해주세요.">
                                    <!-- 유효성 검사 오류 메시지 -->
                                    <div class="text-danger-600 mt-1">
                                        <div v-for="message in validationErrors?.password">
                                            {{ message }}
                                        </div>
                                    </div>
                                </div>
                                <!-- 소셜 로그인 섹션 -->
                                <div class="login-v2 my-5">
                                    <h3 class="mb-4 text-muted"><span>또는 소셜 로그인</span></h3>
                                    <ul class="login-v2-area">
                                        <li><a href="#" class="google" title="google">Google</a></li>
                                        <li><a href="#" class="naver" title="naver">Naver</a></li>
                                        <li><a href="#" class="kakao" title="kakao">Kakao</a></li>
                                    </ul>
                                </div>
                                <!-- 로그인 버튼 -->
                                <div class="flex items-center justify-end my-4">
                                    <button class="btn btn-primary" :class="{ 'opacity-25': processing }" :disabled="processing">
                                        login
                                    </button>
                                </div>
                            </div>
                            <div class="register-link mt-5 text-center">
                                <router-link :to="{ path: '/register' }" class="register-link">회원가입하기</router-link>
                            </div>
                            <div class="text-muted mt-4 text-center">
                                <p class="fs-6">
                                    <a href="/copywrite" class="text-muted spacing">카피라이트</a> |
                                    <a href="/privacy-policy" class="text-muted spacing">개인정보 처리방침</a> |
                                    <a href="/terms" class="text-muted spacing">이용약관</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
    import {
        useReview
    } from '@/composables/review';
    import useAuth from '@/composables/auth' //인증관련 컴포저블2

    const {
        loginForm,
        validationErrors,
        processing,
        submitLogin
    } = useAuth(); //로그인양식데이터, 유효성 검사오류,로그인상태처리, 로구인 함수 할당

    const {
        rating,
        setRating
    } = useReview();
</script>
