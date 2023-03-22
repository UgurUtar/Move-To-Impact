beforeEach(() => {
    cy.refreshDatabase();
    cy.login({ email: "joe@example.com" });
});

describe("Scheduled demo's is accessible", () => {
    it("navigates to appointments page", () => {
        cy.visit("/admin/scheduled-appointments");
        cy.contains("today");
    });
});

describe("Consultants is accessible", () => {
    it("navigates to consultants page", () => {
        cy.visit("/admin/consultants");
        cy.contains("Consultants");
    });
});

describe("Availability is accessible", () => {
    it("navigates to availability page", () => {
        cy.visit("/admin/availability");
        cy.contains("today");
    });
});
