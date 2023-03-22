beforeEach(() => {
    cy.refreshDatabase();
});

describe("Login page is accessible", () => {
    it("visits login page", () => {
        cy.visit("/admin/login");
        cy.contains("Sign in to your account");
    });
});

describe("Failed authentication", () => {
    it("tries to sign an admin in", () => {
        cy.visit("/admin/login");
        cy.get("#email").type("test@test.nl");
        cy.get("#password").type("password");
        cy.contains("button", "Sign in").click();
        cy.contains("These credentials do not match our records.");
    });
});

describe("Succesfull authentication", () => {
    it("signs an admin in", () => {
        cy.create("App\\Models\\User", { email: "joe@example.com" });
        cy.visit("/admin/login");

        cy.get("#email").type("joe@example.com");
        cy.get("#password").type("password");
        cy.contains("button", "Sign in").click();
        cy.assertRedirect("/admin/scheduled-appointments");
    });
});

describe("Logout", () => {
    it("logs an admin out", () => {
        cy.create("App\\Models\\User", { email: "joe@example.com" });
        cy.login({ email: "joe@example.com" });
        cy.visit("/admin/logout");
        cy.assertRedirect("/admin/login");
    });
});
