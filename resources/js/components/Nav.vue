<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container nav-font">
            <router-link :to="{ name: 'home' }" class="navbar-brand"></router-link>
            <!-- 사용자 별 toggle-navbar  -->
            <!-- dealer navbar-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div v-if="isDealer" class="navbar-nav nav-style">
                    <div class="nav-header">
                        <button type="button" class="btn-close" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-label="Close"></button>
                    </div>
                    <div class="toggle-nav-content">
                        <div class="top-content mt-2">
                            <p class="nav-gray-box">안녕하세요,<span>{{ user.name }}</span></p>
                            <div class="tc-light-gray text-end fs-6 mt-2 fw-medium">
                                <p>{{ user.dealer.name }}</p>
                                <p class="mt-1">{{ user.dealer.company }} 점</p>
                            </div>
                        </div>
                        <div class="middle-content">
                            <p class="tc-light-gray fs-6">계정</p>
                            <div @click="redirectByName('dealer.profile')" class="menu-item">
                                <div class="icon settings-icon"></div>
                                <span class="menu-text">정보수정</span>
                                <div class="icon right-icon"></div>
                            </div>
                            <a class="menu-item mb-3" href="/login" @click="logout">
                                <div class="icon logout-icon"></div>
                                <span class="menu-text">로그아웃</span>
                                <div class="icon right-icon"></div>
                            </a>
                        </div>
                        <a class="menu-item mb-3">
                            <div class="icon icon-tag"></div>
                            <span class="menu-text recent-new">입찰하기</span>
                            <div class="icon right-icon"></div>
                        </a>
                        <div @click="redirectByName('dealer.autction.index')" class="menu-item mb-4">
                            <div class="icon icon-awsome"></div>
                            <span class="menu-text">내 매물관리</span>
                            <div class="icon right-icon"></div>
                        </div>
                        <a class="menu-item mb-3">
                            <div class="icon icon-side"></div>
                            <span class="menu-text recent-new">과거 낙찰 이력</span>
                            <div class="icon right-icon"></div>
                        </a>
                        <a class="menu-item mb-3">
                            <div class="icon icon-document"></div>
                            <span class="menu-text recent-new">클레임</span>
                            <div class="icon right-icon"></div>
                        </a>
                        <a class="menu-item mb-3">
                            <div class="icon icon-dash"></div>
                            <span class="menu-text">공지사항</span>
                            <div class="icon right-icon"></div>
                        </a>
                    </div>
                </div>
                <!-- user -->
                <div v-else-if="isUser" class="navbar-nav">
                    <div class="nav-header">
                        <button type="button" class="btn-close" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-label="Close"></button>
                    </div>
                    <div class="toggle-nav-content">
                        <div class="top-content mt-2">
                            <p class="nav-gray-box">안녕하세요,<span>{{ user.name }}</span></p>
                            <div class="tc-light-gray text-end fs-6 mt-2 fw-medium">
                                <p>소속 상사가 들어갑니다 파트너점</p>
                                <p class="mt-1"> </p>
                            </div>
                        </div>
                        <div class="middle-content-ty02">
                            <router-link :to="{ name: 'autction.index' }" class="nav-link dealer-check-link mt-5">딜러 페이지 확인용 링크</router-link>
                            <div @click="redirectByName('autction.index')" class="menu-item mb-4">
                                <div class="icon icon-awsome"></div>
                                <span class="menu-text">내 매물관리</span>
                                <div class="icon right-icon"></div>
                            </div>
                        </div>
                        <div class="footer-content">
                            <p class="tc-light-gray fs-6">계정</p>
                            <router-link :to="{ name: 'dealer.profile' }" class="menu-item">
                                <div class="icon settings-icon"></div>
                                <span class="menu-text">정보수정</span>
                                <div class="icon right-icon"></div>
                            </router-link>
                            <a class="menu-item mb-3" href="/login" @click="logout">
                                <div class="icon logout-icon"></div>
                                <span class="menu-text">로그아웃</span>
                                <div class="icon right-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div v-else class="navbar-nav">
                    <div class="nav-header">
                        <button type="button" class="btn-close" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-label="Close"></button>
                    </div>
                    <div class="toggle-nav-content">
                        <div class="top-content mt-2">
                            <span class="login-prompt">로그인하면 <br>더 다양한 정보를 <br>얻을 수 있어요.</span>
                            <div class="button-area">
                                <button class="btn btn-danger shadow wd-100">로그인</button>
                            </div>
                            <div class="register-linker tc-light-gray">
                                <span>아이디가 없으신가요?</span>
                                <router-link :to="{ name: 'dealer.profile' }" class="tc-light-gray">회원가입</router-link>
                            </div>
                            <div class="middle-content-ty03">
                                <div class="menu-illustration">
                                    <img src="../../img/car-objects.png" alt="자동차 이미지" width="170" height="170">
                                </div>
                            </div>
                            <div class="footer-content">
                                <router-link :to="{ name: 'dealer.profile' }" class="menu-item">
                                    <div class="icon settings-icon"></div>
                                    <span class="menu-text">내 차 팔기</span>
                                    <div class="icon right-icon"></div>
                                </router-link>
                                <router-link :to="{ name: 'dealer.profile' }" class="menu-item">
                                    <div class="icon settings-icon"></div>
                                    <span class="menu-text">이용후기</span>
                                    <div class="icon right-icon"></div>
                                </router-link>
                                <router-link :to="{ name: 'dealer.profile' }" class="menu-item">
                                    <div class="icon logout-icon"></div>
                                    <span class="menu-text">서비스 소개</span>
                                    <div class="icon right-icon"></div>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 공통 -->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mt-2 mt-lg-0 gap-3 ms-auto">
                    <li class="nav-item">
                        <router-link to="/sell" class="nav-link" aria-current="page">내차조회</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'public-posts.index'}" class="nav-link">내차팔기</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'user.review'}" class="nav-link">이용후기</router-link>
                    </li>
                    <!-- 게스트 일때 -->
                    <template v-if="!user?.name">
                        <li class="nav-item">
                            <router-link class="nav-link" to="/login">로그인</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/register">회원가입</router-link>
                        </li>
                    </template>
                    <!-- 로그인 시 -->
                    <ul v-if="user?.name" class="navbar-nav mt-lg-0 ms-auto">
                        <li class="my-member"><img src="../../img/myprofile_ex.png" class="nav-profile" alt="Profile Image"><a class="nav-link" href="#">{{ user.name }}</a></li>
                        <li><a class="nav-link tc-light-gray logout" href="/login" @click="logout">로그아웃</a></li>
                    </ul>
                </ul>
            </div>
            <a class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>
        </div>
    </nav>
</template>
<script setup>
import { ref } from "vue";
import { useStore } from "vuex";
import useAuth from "@/composables/auth";
import { computed } from "vue";
import { useRouter } from 'vue-router';

const router = useRouter();
const store = useStore();
const user = computed(() => store.getters["auth/user"]);
const isDealer = computed(() => user.value?.roles?.includes('dealer'));
const isUser = computed(() => user.value?.roles?.includes('user'));

const { logout } = useAuth();

const redirectByName = (routeName) => {
    router.push({ name: routeName });
}; //리다이렉션 : 명


const homePath = computed(() => {
    if (isDealer.value) {
        return { name: 'dealer.index' }; 
    } else if (isUser.value) {
        return { name: 'user.index' }; 
    } else {
        return { name: 'home' };
    }
});
</script>
<style>
    .toggle-nav-content {
        display: flex;
        flex-direction: column;
        overflow-y: hidden;
    }

    .middle-content-ty02 {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex-grow: 1;
    }

    .footer-content {
        margin-top: auto;
        width: 100%;
    }

    .dealer-check-link {
        height: 68px;
        line-height: 10px;
        font-weight: 500;
        padding: 25px 26px;
        border: solid 1px #f0d;
        background-color: #fff;
        color: #f0d !important;
        text-align: center;
        margin-right: 0px;
    }

    .menu-illustration,
    .menu-footer {
        width: 100%;
    }

    .menu-illustration {
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-prompt {
        display: block;
        width: 100%;
        text-align: right;
        font-size: 22px;
        font-weight: 600;
        margin: 20px 0;
    }

    .register-linker {
        margin-top: 15px;
        display: flex;
        justify-content: space-between;
    }

    .middle-content-ty03 {
        margin-top: 8rem !important;

    }
</style>