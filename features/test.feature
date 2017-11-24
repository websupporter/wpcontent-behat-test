Feature: Test

  @javascript
  Scenario: Plugin 1 is running
    Given I am on "/"
    Then I should see "Plugin 1"

  Scenario: Plugin 2 is running
    Given I am on "/"
    Then I should see "Plugin 2"