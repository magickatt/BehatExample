Feature: Basket

  The basket should contain fruit

  Scenario: I should be able to get to the basket from the homepage
    Given I am on the homepage
    When I follow "Basket"
    Then I should see "Basket"

  Scenario: The basket should have certain fruit in it
    Given I am on "basket"
    Then I should see "Apple"
    And I should see "Pear"