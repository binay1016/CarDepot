const STORAGE_KEY = 'carDepotUsers';
const AUTH_KEY = 'carDepotLoggedIn';
const VALID_USERNAME = 'binay';
const VALID_PASSWORD = 'binay123';

const form = document.getElementById('loginForm');
const errorMsg = document.getElementById('errorMsg');
const successMsg = document.getElementById('successMsg');
const signupForm = document.getElementById('signupForm');
const logoutBtn = document.getElementById('logoutBtn');

function getStoredUsers() {
  try {
    return JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
  } catch (error) {
    return [];
  }
}

function authenticateUser(username, password) {
  const storedUsers = getStoredUsers();
  const matchedUser = storedUsers.find((user) => user.username === username);

  if (username === VALID_USERNAME && password === VALID_PASSWORD) {
    return true;
  }

  return matchedUser && matchedUser.password === password;
}

function loginUser(username) {
  localStorage.setItem(AUTH_KEY, username);
}

function logoutUser() {
  localStorage.removeItem(AUTH_KEY);
  window.location.href = 'index.php';
}

function getLoggedInUser() {
  return localStorage.getItem(AUTH_KEY);
}

function requireLogin() {
  const user = getLoggedInUser();
  if (!user) {
    window.location.href = 'index.php';
    return null;
  }
  return user;
}

function redirectIfLoggedIn() {
  const user = getLoggedInUser();
  if (user) {
    window.location.href = 'home.html';
  }
}

if (form) {
  redirectIfLoggedIn();

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    errorMsg.classList.remove('show');
    successMsg.classList.remove('show');

    if (authenticateUser(username, password)) {
      loginUser(username);
      successMsg.classList.add('show');
      form.querySelector('.btn-login').textContent = 'Signing In...';

      setTimeout(() => {
        window.location.href = 'home.html';
      }, 900);
    } else {
      errorMsg.classList.add('show');
      document.getElementById('password').value = '';
      document.getElementById('password').focus();
    }
  });
}

if (signupForm) {
  signupForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const newUsername = document.getElementById('newUsername').value.trim();
    const newPassword = document.getElementById('newPassword').value.trim();

    if (!newUsername || !newPassword) {
      alert('Please fill in both username and password.');
      return;
    }

    const storedUsers = getStoredUsers();
    const usernameExists = storedUsers.some((user) => user.username === newUsername);

    if (usernameExists) {
      alert('That username is already taken. Please choose another one.');
      return;
    }

    storedUsers.push({ username: newUsername, password: newPassword });
    localStorage.setItem(STORAGE_KEY, JSON.stringify(storedUsers));

    alert('Account created successfully! You can now log in.');
    window.location.href = 'index.php';
  });
}

if (logoutBtn) {
  logoutBtn.addEventListener('click', function (e) {
    e.preventDefault();
    localStorage.removeItem(AUTH_KEY);
    window.location.href = 'index.php';
  });
}