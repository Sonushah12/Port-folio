(() => {
  "use strict";
  const reduceMotion = matchMedia("(prefers-reduced-motion: reduce)");
  const menuButton = document.querySelector(".menu-toggle");
  const navigation = document.querySelector(".primary-nav");
  const closeMenu = () => {
    if (!menuButton || !navigation) return;
    menuButton.setAttribute("aria-expanded", "false");
    menuButton.querySelector(".sr-only").textContent = "Open navigation";
    navigation.classList.remove("is-open");
  };
  menuButton?.addEventListener("click", () => {
    const open = menuButton.getAttribute("aria-expanded") !== "true";
    menuButton.setAttribute("aria-expanded", String(open));
    menuButton.querySelector(".sr-only").textContent = open
      ? "Close navigation"
      : "Open navigation";
    navigation.classList.toggle("is-open", open);
  });
  navigation
    ?.querySelectorAll("a")
    .forEach((link) => link.addEventListener("click", closeMenu));
  document.addEventListener("keydown", (event) => {
    if (
      event.key === "Escape" &&
      menuButton?.getAttribute("aria-expanded") === "true"
    ) {
      closeMenu();
      menuButton.focus();
    }
  });
  document.addEventListener("click", (event) => {
    if (
      menuButton?.getAttribute("aria-expanded") === "true" &&
      !event.target.closest(".site-header")
    )
      closeMenu();
  });
  matchMedia("(min-width: 681px)").addEventListener("change", (event) => {
    if (event.matches) closeMenu();
  });

  // Motion is decorative; both OS preferences and an explicit pause control win.
  const art = document.querySelector(".hero-art");
  const motionButton = document.querySelector(".motion-toggle");
  let pausedByUser = false;
  const updateMotion = () => {
    const paused = pausedByUser || reduceMotion.matches || document.hidden;
    document.body.classList.toggle("motion-paused", paused);
    if (!motionButton) return;
    motionButton.setAttribute(
      "aria-pressed",
      String(pausedByUser || reduceMotion.matches),
    );
    motionButton.querySelector("span").textContent = reduceMotion.matches
      ? "Reduced motion on"
      : pausedByUser
        ? "Resume motion"
        : "Pause motion";
    motionButton.disabled = reduceMotion.matches;
    if (paused && art) {
      art.style.removeProperty("--art-x");
      art.style.removeProperty("--art-y");
    }
  };
  motionButton?.addEventListener("click", () => {
    pausedByUser = !pausedByUser;
    updateMotion();
  });
  reduceMotion.addEventListener("change", updateMotion);
  document.addEventListener("visibilitychange", updateMotion);
  updateMotion();
  if (art && matchMedia("(hover: hover) and (pointer: fine)").matches) {
    art.addEventListener("pointermove", (event) => {
      if (document.body.classList.contains("motion-paused")) return;
      const bounds = art.getBoundingClientRect();
      art.style.setProperty(
        "--art-x",
        `${((event.clientX - bounds.left) / bounds.width - 0.5) * 22}px`,
      );
      art.style.setProperty(
        "--art-y",
        `${((event.clientY - bounds.top) / bounds.height - 0.5) * 16}px`,
      );
    });
    art.addEventListener("pointerleave", () => {
      art.style.setProperty("--art-x", "0px");
      art.style.setProperty("--art-y", "0px");
    });
  }
  if ("IntersectionObserver" in window) {
    if (art)
      new IntersectionObserver((entries) => {
        art.querySelector(".orbit-sculpture").style.animationPlayState =
          entries[0].isIntersecting ? "" : "paused";
      }).observe(art);
    const projectObserver = new IntersectionObserver(
      (entries) =>
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            projectObserver.unobserve(entry.target);
          }
        }),
      { threshold: 0.12 },
    );
    document.querySelectorAll(".project-card").forEach((card) => {
      if (!reduceMotion.matches) card.classList.add("motion-ready");
      projectObserver.observe(card);
    });
    const sectionObserver = new IntersectionObserver(
      (entries) =>
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            navigation?.querySelectorAll("[data-section]").forEach((link) => {
              if (link.dataset.section === entry.target.id)
                link.setAttribute("aria-current", "location");
              else link.removeAttribute("aria-current");
            });
          }
        }),
      { rootMargin: "-20% 0px -55% 0px" },
    );
    document
      .querySelectorAll("main > section[id]")
      .forEach((section) => sectionObserver.observe(section));
  }
  const progress = document.querySelector(".reading-progress");
  let scrollPending = false;
  const drawProgress = () => {
    const total = document.documentElement.scrollHeight - innerHeight;
    if (progress)
      progress.style.transform = `scaleX(${total > 0 ? scrollY / total : 0})`;
    scrollPending = false;
  };
  addEventListener(
    "scroll",
    () => {
      if (!scrollPending) {
        scrollPending = true;
        requestAnimationFrame(drawProgress);
      }
    },
    { passive: true },
  );
  addEventListener("resize", drawProgress);
  drawProgress();

  const form = document.querySelector("#contact-form");
  if (!form) return;
  form.noValidate = true;
  const status = document.querySelector("#form-status");
  const errorSummary = document.querySelector("#form-errors");
  const submit = form.querySelector('button[type="submit"]');
  const fields = ["name", "email", "description"];
  const displayErrors = (errors) => {
    errorSummary.replaceChildren();
    fields.forEach((id) => {
      const input = form.querySelector(`#${id}`);
      const error = errors[id] || "";
      document.getElementById(`${id}-error`).textContent = error;
      if (error) input.setAttribute("aria-invalid", "true");
      else input.removeAttribute("aria-invalid");
    });
    errorSummary.hidden = Object.keys(errors).length === 0;
    if (errorSummary.hidden) return;
    const heading = document.createElement("strong");
    heading.textContent = "A couple of details to check";
    errorSummary.append(heading);
    Object.entries(errors).forEach(([id, message]) => {
      const link = document.createElement("a");
      link.href = `#${id}`;
      link.textContent = message;
      link.addEventListener("click", (event) => {
        event.preventDefault();
        document.getElementById(id)?.focus();
      });
      errorSummary.append(link);
    });
    errorSummary.focus();
  };
  fields.forEach((id) =>
    document.getElementById(id).addEventListener("input", (event) => {
      if (event.target.hasAttribute("aria-invalid")) {
        event.target.removeAttribute("aria-invalid");
        document.getElementById(`${id}-error`).textContent = "";
      }
    }),
  );
  form.addEventListener("submit", async (event) => {
    event.preventDefault();
    if (submit.disabled) return;
    const errors = {};
    fields.forEach((id) => {
      const field = document.getElementById(id);
      field.value = field.value.trim();
      if (!field.value)
        errors[id] = {
          name: "Enter your name.",
          email: "Enter your email address.",
          description: "Tell me a little about your idea.",
        }[id];
      else if (field.validity.typeMismatch)
        errors[id] = "Enter a valid email address.";
      else if (field.value.length > field.maxLength)
        errors[id] =
          `Please keep this field under ${field.maxLength} characters.`;
    });
    displayErrors(errors);
    if (Object.keys(errors).length) return;
    submit.disabled = true;
    submit.querySelector("span").textContent = "Sending…";
    form.setAttribute("aria-busy", "true");
    status.dataset.state = "pending";
    status.textContent = "Saving your message…";
    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: new FormData(form),
        headers: { Accept: "application/json" },
        signal: AbortSignal.timeout(20000),
      });
      const result = await response.json();
      if (!response.ok) {
        if (result.errors) displayErrors(result.errors);
        throw new Error(
          result.message ||
            "Your message couldn’t be saved. Please try again or email me directly.",
        );
      }
      status.dataset.state = "success";
      status.textContent = result.message;
      form.reset();
    } catch (error) {
      status.dataset.state = "error";
      status.textContent =
        error.name === "TimeoutError" || error.name === "TypeError"
          ? "The connection was interrupted. Please try again or email me directly."
          : error.message;
    } finally {
      submit.disabled = false;
      submit.querySelector("span").textContent = "Send message";
      form.removeAttribute("aria-busy");
    }
  });
})();
