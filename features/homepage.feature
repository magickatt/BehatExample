Feature: Homepage

  As a user
  I want to see the homepage
  So I can celebrate in joy

  Scenario:
    Given I am an anonymous user
    When I visit the "home" page
    Then I should see the text "Hello World"