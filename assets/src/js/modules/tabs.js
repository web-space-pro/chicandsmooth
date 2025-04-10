const tabs = document.querySelectorAll(".tab");
const indicator = document.querySelector(".tab-indicator");
const panels = document.querySelectorAll(".panel");
const container = document.querySelector("#panel-container");

function activateTab(tab) {
    const targetId = tab.getAttribute("aria-controls");

    tabs.forEach(t => {
        t.setAttribute("aria-selected", t === tab ? "true" : "false");
    });

    panels.forEach(panel => {
        const isTarget = panel.id === targetId;

        if (isTarget) {
            // Активная панель
            panel.classList.remove("opacity-0", "scale-95", "pointer-events-none", "invisible", "z-10");
            panel.classList.add("opacity-100", "scale-100", "z-20", "visible");
        } else {
            // Скрываемая панель
            panel.classList.remove("opacity-100", "scale-100", "z-20", "visible");
            panel.classList.add("opacity-0", "scale-95", "pointer-events-none", "z-10");

            // Добавим задержку перед тем как сделать её невидимой
            setTimeout(() => {
                panel.classList.add("invisible");
            }, 500); // должен совпадать с duration
        }
    });

    // Обновим высоту по новой панели
    const activePanel = document.getElementById(targetId);
    const innerGrid = activePanel?.querySelector(".grid");

    if (innerGrid && container) {
        container.style.height = innerGrid.offsetHeight + "px";
    }

    updateIndicator(tab);
}

// Индикатор таба
function updateIndicator(tab) {
    const rect = tab.getBoundingClientRect();
    const parentRect = tab.parentElement.getBoundingClientRect();
    indicator.style.width = `${rect.width}px`;
    indicator.style.left = `${rect.left - parentRect.left}px`;
}

// Обновляем при ресайзе
window.addEventListener("resize", () => {
    const activePanel = document.querySelector(".panel.opacity-100");
    const innerGrid = activePanel?.querySelector(".grid");

    if (innerGrid && container) {
        container.style.height = innerGrid.offsetHeight + "px";
    }

    const activeTab = document.querySelector('.tab[aria-selected="true"]');
    if (activeTab) updateIndicator(activeTab);
});

// Инициализация
window.addEventListener("load", () => {
    const activeTab = document.querySelector('.tab[aria-selected="true"]');
    if (activeTab) {
        const targetId = activeTab.getAttribute("aria-controls");
        const activePanel = document.getElementById(targetId);
        container.style.height = activePanel.offsetHeight + "px";
        updateIndicator(activeTab);
    }
});

tabs.forEach(tab => {
    tab.addEventListener("click", () => activateTab(tab));
});

window.addEventListener("load", () => {
    const activeTab = document.querySelector('.tab[aria-selected="true"]');
    const targetId = activeTab?.getAttribute("aria-controls");
    const activePanel = document.getElementById(targetId);
    const innerGrid = activePanel?.querySelector(".grid");

    if (innerGrid && container) {
        container.style.height = innerGrid.offsetHeight + "px";
    }

    if (activeTab) updateIndicator(activeTab);
});
