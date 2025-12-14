<header class="site-header">
    <div class="header-container">
        <a href="/" class="header-logo">
            <span class="logo-icon">📚</span>
            <span class="logo-text">Библиотека</span>
        </a>

        <button class="menu-toggle" aria-label="Открыть меню">
            ☰
        </button>

        <div class="header-actions">
            <?php if (!isset($_SESSION['user'])) { ?>
                <a href="/login" class="header-btn profile-btn">
                    <span class="btn-icon">👤</span>
                    <span class="btn-text">Войти</span>
                </a>
            <?php } else { ?>
                <a href="/profile" class="header-btn profile-btn">
                    <span class="btn-icon">👤</span>
                    <span class="btn-text">Профиль</span>
                </a>

                <a href="/login?action=logout" class="header-btn logout-btn">
                    <span class="btn-icon">🚪</span>
                    <span class="btn-text">Выйти</span>
                </a>
            <?php } ?>
        </div>
    </div>
</header>

<style>
    .site-header {
        background: white;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        border-bottom: 3px solid #d32f2f;
        position: sticky;
        top: 0;
        z-index: 1000;
        padding: 0 20px;
    }

    .header-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 70px;
    }

    .header-logo {
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        transition: transform 0.3s ease;
    }

    .header-logo:hover {
        transform: translateY(-2px);
    }

    .logo-icon {
        font-size: 2.2rem;
        color: #d32f2f;
    }

    .logo-text {
        font-size: 1.8rem;
        font-weight: 800;
        color: #2c3e50;
        letter-spacing: -0.5px;
    }

    .header-actions {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .header-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        cursor: pointer;
    }

    .profile-btn {
        background: #f8f9fa;
        color: #2c3e50;
        border-color: #e0e0e0;
    }

    .profile-btn:hover {
        background: #e9ecef;
        border-color: #d32f2f;
        color: #d32f2f;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .logout-btn {
        background: #d32f2f;
        color: white;
    }

    .logout-btn:hover {
        background: #b71c1c;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(211, 47, 47, 0.25);
    }

    .btn-icon {
        font-size: 1.1rem;
    }

    .menu-toggle {
        display: none;
        background: none;
        border: none;
        font-size: 1.5rem;
        color: #d32f2f;
        cursor: pointer;
        padding: 10px;
    }

    @media (max-width: 768px) {
        .header-container {
            height: auto;
            padding: 15px 0;
            flex-wrap: wrap;
        }

        .menu-toggle {
            display: block;
            order: 1;
        }

        .header-logo {
            order: 2;
            flex: 1;
            justify-content: center;
            margin: 0 15px;
        }

        .header-actions {
            display: none;
            order: 3;
            width: 100%;
            flex-direction: column;
            gap: 10px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        .header-actions.active {
            display: flex;
        }

        .header-btn {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .logo-text {
            font-size: 1.5rem;
        }

        .logo-icon {
            font-size: 1.8rem;
        }
    }
</style>

<script>
    // Скрипт для мобильного меню
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const headerActions = document.querySelector('.header-actions');

        if (menuToggle && headerActions) {
            menuToggle.addEventListener('click', function() {
                headerActions.classList.toggle('active');
                this.textContent = headerActions.classList.contains('active') ? '✕' : '☰';
            });

            document.querySelectorAll('.header-btn').forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        headerActions.classList.remove('active');
                        menuToggle.textContent = '☰';
                    }
                });
            });
        }

        document.querySelectorAll('.header-btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                if (window.innerWidth > 768) {
                    this.style.transform = 'translateY(-2px)';
                }
            });

            btn.addEventListener('mouseleave', function() {
                if (window.innerWidth > 768) {
                    this.style.transform = 'translateY(0)';
                }
            });
        });
    });
</script>