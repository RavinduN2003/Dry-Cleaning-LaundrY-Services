#include "Campaign.h"
#include "Marketer.h"

Campaign::Campaign() {
    date = 0;
    time = 0;
    campaignId = 0;
    description = "";
}

Campaign::Campaign(int cDate, int cTime, int cId, string cDescription) {
    date = cDate;
    time = cTime;
    campaignId = cId;
    description = cDescription;
}

void Campaign::editCampaign(int cDate, int cTime, int cId, string cDescription) {
    date = cDate;
    time = cTime;
    campaignId = cId;
    description = cDescription;
}

void Campaign::viewCampaignDetails() {
    cout << endl;
    cout << " Campaign Date : " << date << endl;
    cout << " Campaign Time : " << time << endl;
    cout << " Campaign ID : " << campaignId << endl;
    cout << " Campaign Discription : " << description << endl;
    cout << endl;
   
}

Campaign::~Campaign() {
 
}
