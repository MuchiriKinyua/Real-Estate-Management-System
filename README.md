# King-County-House-Sales-Project
![rent_house_73089751-5bfc333346e0fb002602ddbe](https://github.com/MuchiriKinyua/King-County-House-Sales-Project/assets/113877377/b11b0856-37a1-45b9-bc1a-f579bf260bcd)
# Business understanding
# Introduction
The following project analyzes the housing sales of King county. It will try to compare how prices are influenced by different features e.g., bathrooms, bedrooms and such. This features will be tested side by side with the price to see their proportion against each other i.e does the increase in feature A lead to increase/decrease in the price. Does it even have an effect to start with. This will enable us to give the stakeholder the visuals and the recommendations to enable him or her to make the necessary conclusions. 
# Problem Statement
The problem statement is to give the stakeholders real estate data which will enable them know where to invest, how to renovate based upon previous patterns which have already occured in the northwestern county real estate business. There is need to identify the trends there in the past and their consequences e.g when the house was put up in front of a water body(waterfront), how fast did it find a customer. Does putting it in front of a waterfront have any positive impact?
# Main Objective
The main objective is to select the features which influence the price of a house mostly and then visualize them and put them on a regression scale based on the past data to construct a predictive model to identify how in the future, what will be influencing the real estate business.
# Specific Objectives
To identify the most correlated features with the price to create a multilinear regreesion to help us in knowing how the features influence the prices and even influence the customers. </br>
To build a baseline model to identify the most relevant data to be used as the starting point of the analysis. </br>
To use the linear regression metrics to have the appopriate coefficients which will enable us to come up with the relevant recommendations for the stakeholders of the real estates 
# Notebook Structure
## Introduction </br>
## Problem Statement </br>
## Main Objective </br>
## Specific Objectives </br>
## Importing Libraries </br>
## Data Understanding </br>
## Data Cleaning </br>
## Modelling </br>
## Regression Results </br>
## Data Visualizations </br>
## Interpretations</br>
## Recommendations and Conclusions </br>
# Data understanding
## Column Names and Descriptions for King County Data Set
* `id` - Unique identifier for a house
* `date` - Date house was sold
* `price` - Sale price (prediction target)
* `bedrooms` - Number of bedrooms
* `bathrooms` - Number of bathrooms
* `sqft_living` - Square footage of living space in the home
* `sqft_lot` - Square footage of the lot
* `floors` - Number of floors (levels) in house
* `waterfront` - Whether the house is on a waterfront
* `view` - Quality of view from house
* `condition` - How good the overall condition of the house is. Related to maintenance of house.
* `grade` - Overall grade of the house. Related to the construction and design of the house.
* `sqft_above` - Square footage of house apart from basement
* `sqft_basement` - Square footage of the basement
* `yr_built` - Year when house was built
* `yr_renovated` - Year when house was renovated
* `zipcode` - ZIP Code used by the United States Postal Service
* `lat` - Latitude coordinate
* `long` - Longitude coordinate
* `sqft_living15` - The square footage of interior housing living space for the nearest 15 neighbors
* `sqft_lot15` - The square footage of the land lots of the nearest 15 neighbors

# Modelling
Simple-linear regression - Bedroom against price
Multiple linear regression - used it on the following features: sqft_living, sqft_lot, floors, bathrooms, bedrooms, grade
Recursive feature selection - selected bedrooms, sqft_living and grade as the most important features
Regression model evaluation - Had the following: Mean Squared Error of 10.3957, R-squared of 0.6285 and Mean Absolute Error of 2.5568

# Interpretation Results
Adjusted rsquared of 0.614 means that the features can explain the houses prices by approximately 0.62 units. The better since the more the figure is near one the better.</br>
F-statistic of 4354 means there is a strong relationship between the features and the prices. The model is wholly significant. </br>
Coefficient of bathrooms is 0.0563 means that the addition of a single bathroom (while the other features are constant) will lead to the increase of price by 0.0563 unit.</br>
Coefficient of sqft_living is 0.5434: Just like bathrooms, when there is an increase of one unit of sqft_luving, then there is an inrease of 0.5434 unit of the price. </br>
Coefficient of grade is 1.7646 means one unit change for grade e.g good to better, will mean an increase of 1.7646 unit of the price. </br>
Coefficient of bedrooms is 0.6929 meaning for every increase in a bedroom, there is an increase of 0.06929 unit of the price.</br>
Mean squared error of 10.3957 means that a the price for a given house may deviated by approximately 10 units from the actual price. </br>
Rsquared of 0.6285 means that the three featured features can explain the houses prices by approximately 0.62. The better since the more the figure is near one the better. </br>
Mean Absolute Error of 2.5568 means that the house price which are predicted deviate from the actual prices now known by 2.5568</br>

# Recommendations and Conclusions
Most features have been noted to have statistical significance on the price of the houses. In particular, these three features are very important and will play a very crucial role in the future in determining the price of the houses: </br>
Bedrooms <br>
Grade </br>
Living area </br>
Also, the stakeholders should keep a close eye on the: </br> bedroom </br> living area </br> grade </br>of a house while making kings county housing investments later on. </br>
</br>
a. The increase in the number of bathrooms means the increase in price of a house. </br>
b. The better the grade of the house i.e average > good > excellent better means the the more expensive a house will be. </br>
c.The more the bedrooms means the higher the price of a house becomes e.g a three bedroom house is more expensive than a two bedroom house. </br>
</br>
Finally, the assumptions being correct means the data provided above is reliable and can be used to predict future house prices. </br>
Normality: It means there no outliers in the data </br>
Homoscedasticity: It means the variables variability is equal across values of the features. </br>
But of course, things may change in the future so continously updating the model from time to time can be important too. </br>
