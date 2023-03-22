

beforeEach(() => {
    cy.refreshDatabase();
    cy.login({ email: "joe@example.com" });
    cy.visit("/admin/availability");
});

describe('Adding consultant availability', () => {
    it('adds new availability for consultant', () => {
        cy.get('.fc-daygrid-day', ).first().click();
    });
});
