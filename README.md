# Rolex-mobiles
Billing & Inventory Management Software for Rolex Mobiles

### 📌 Assigned Module Branches
* **Master Setup:** `master-setup`(PAVITHRA)
* **Purchase Management:** `purchase-management`(JEEVA)
* **Sales & Billing:** `sales-billing`(SRINIVAS)

Step 1: Clone the Repository
   Open your terminal or command prompt, clone the project to your local machine, and enter the project folder:
   |------------------------------------------------------------------------|
   | git clone https://github.com/Api-x-code/Rolex-mobiles.git              |
   |  cd Rolex-mobiles                                                      |
   |------------------------------------------------------------------------|

Step 2: Switch to Your Assigned Module Branch
Before writing any code, switch to the specific module branch assigned to you and pull the latest updates from GitHub:
    |------------------------------------------------------------------------|
    | git checkout <your-assigned-branch-name>                               |
    | git pull origin <your-assigned-branch-name>                            |
    |------------------------------------------------------------------------|

Step 3: Create a Feature Sub-Branch
Never work or commit directly on the main module branch. Always create a personal feature sub-branch from it using your name and task description:
   |------------------------------------------------------------------------|
   | git checkout -b feature/<your-name>-<task-description>                 |
   |------------------------------------------------------------------------|

Step 4: Write Code and Commit Your Changes
After implementing your changes or completing your assigned task, stage and commit them locally:
    |------------------------------------------------------------------------|
    |  git add .                                                             |
    |  git commit -m "Completed [Brief description of your feature or fix]"  |
    |------------------------------------------------------------------------|

Step 5: Push to Your Sub-Branch
Push your sub-branch changes to the remote GitHub repository (never push to main):
   |------------------------------------------------------------------------|
   |  git push origin feature/<your-name>-<task-description>                |
   |------------------------------------------------------------------------|

------------------------------📌this is for project maintainer----------------------------

Merging Workflow (For Project Maintainer)
Step 6: Merge Sub-Branch into the Assigned Module Branch
Go to the GitHub repository page.

   1.Click Compare & pull request for your recently pushed feature branch.

   2.Set the base branch to your assigned module branch (e.g., sales-billing) and compare to your feature sub-branch.

   3.Click Create pull request and then Merge pull request to integrate the code into the module branch.

Step 7: Merge Module Branches into the main Branch
Once all features for a module are fully tested and ready:

   1.Go to Pull Requests and click New Pull Request.

   2.Set the base branch to main and compare to the respective module branch (e.g., sales-billing).

   3.Click Create pull request and merge it into main to finalize the release version.


----Master Setup----
   git checkout -b master-setup
   git push -u origin master-setup

----Purchase Management----
   git checkout -b purchase-management
   git push -u origin purchase-management

----Sales & Billing----
   git checkout -b sales-billing
   git push -u origin sales-billing


------------------------------------------------------------------------------------------
