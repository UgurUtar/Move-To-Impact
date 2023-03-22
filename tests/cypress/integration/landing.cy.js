describe('Landing page is accessible', () => {
    it('visits landing page', () => {
        cy.visit('/');
        cy.contains('Digital CSRD preparation program');
    });
});

describe('Clicking book demo button', () => {
    it('clicks on book demo button', () => {
        cy.visit('/');
        cy.get('#book-demo-button').click()
        cy.contains('Schedule a product demo');
    });
});
