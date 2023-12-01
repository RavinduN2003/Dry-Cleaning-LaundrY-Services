#include <iostream>
#include "Campaign.h"
#include "Marketer.h"
#include "RegisteredUser.h"
#include "Administrator.h"
#include "Complaint.h"
#include "DryCleaner.h"
#include "Manager.h"
#include "Order.h"
#include "Payment.h"
#include "Report.h"
#include "Service.h"
#include "UnRegisteredUser.h"


using namespace std;

int main() {

//Marketer and Campaign class
 // Create a Campaign
    Campaign campaign1(20231029, 1400, 1, "New Product Launch");

    // View Campaign Details
    campaign1.viewCampaignDetails();

    // Create a Marketer
    Marketer marketer1(1, "John Doe");

    // Create a campaign and assign it to the Marketer
    marketer1.createMarketingCampaign(20231029, 701, 2, "New Session");

    // Attempt to create another Campaign
    marketer1.createMarketingCampaign(20231101, 1500, 3, "Holiday Promotion");

//registered user

    RegisteredUser user1("Ravindu",1234,"RN",1);
    user1.login("Ravindu" ,1234);
    user1.browseServicesAndPrices();
    user1.viewOrderHistory();
    user1.placeOrder("Bob", "Clean", 1000);
//manager

    Manager m1;
    m1.viewOrder();
    m1.assignOrder("Bob", "Clean", 1000);
    m1.generateReports(1, "Report About Me");

//Dry Cleaner

    DryCleaner dc1;
    dc1.updateOrderDetails("Bob", "Clean", 1000);
    dc1.acceptOrder("none", "press", 2000);
    dc1.viewOrder();

//Administrator
     
    Administrator admin;
    admin.editServices(1, "Normal", 1000);
    admin.handleComplaint();

//Complaint

    Complaint com1(1,"About Service");
    com1.viewCustomerComplaints();

 //Order

    Order oder1("Normal", "Pressing", 5000);
    oder1.getOrderDetails();
    oder1.calculateOrderCost(10);

//Payment

    Payment pay1("Online", 1, "Credit Card");
    pay1.paymentdetails();
    pay1.getDeliveryCharge();
    pay1.paymentcomplaint();

//Report

    Report r1(1,"Payment Report");
    r1.generateReports(2, "About Salary");

//Service

    Service service1(1,"Cleaning",1500);
    service1.placeOrder("Daily", "Customer", 3200);
    service1.ViewServicesAndPrices();

//Unregistered User

    UnRegisteredUser ur1("RV", 1234, "Ravindu Nethmina");
    ur1.register("RV", 1234, "Ravindu Nethmina");
    ur1.browseServicesAndPrices();

     return 0;
}
