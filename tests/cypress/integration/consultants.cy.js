beforeEach(() => {
    cy.refreshDatabase();
    cy.login({ email: "joe@example.com" });
    cy.visit("/admin/consultants");
});

describe("Open add consultant popup", () => {
    it("opens a popup to add a new consultant", () => {
        cy.get("#add-consultant-button").click();
        cy.contains("Add consultant");
    });
});

describe("Add new consultant", () => {
    it("adds a new consultant", () => {
        cy.get("#add-consultant-button").click();
        cy.get("#name").type("test consultant");
        cy.get("#email").type("consultant@test.nl");
        cy.get("#multiple-files").attachFile({
            filePath: "avatar.png",
            fileName: "avatar.pdf",
            mimeType: "image/png",
        });
        cy.get("#submit-consultant-button").click();
        cy.contains("joe@example.com");
    });
});

describe("View consultant availability", () => {
    it("navigates to the individual availability page", () => {
        cy.get("#individual-availability-1").click();
        cy.visit({
            route: 'admin.availability.individual',
            parameters: { id: 1 }
        });
    });
});

// describe("Delete consultant", () => {
//     it('deletes a consultant', () => {
//         cy.get('.delete-consultant-button').click();
//         cy.get('.consultants-container').should('not.include.text', 'joe@example.com')
//     });
// });
