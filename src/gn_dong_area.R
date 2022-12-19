### 강남구 동별 평균 거래금액 그래프

### Paths for Packages
.libPaths("C:/Users/woo/Documents/R/win-library/4.1")

### package
library(RMariaDB)
library(readr)
library(dplyr)
library(lubridate)

library(plotly)
library(ggplot2)

### Database 접속
MDB.host <- 'best.hnu.kr'
MDB.id <- 'LeeEung'
MDB.pw <- '0101'
MDB.db <- 'LeeEung'
MDB.port <- 3306

### DB 연결
con <- dbConnect(
  RMariaDB::MariaDB(),
  host = MDB.host,
  username = MDB.id,
  password = MDB.pw,
  dbname = MDB.db,
  port = MDB.port
)

### Query 결과물 data frame 으로 저장
# DB:table(gn_dong_price) -> R:dataframe
query.str.dong <- paste("select * from gn_dong_price ", sep="")
dong_apt_price_all <- dbGetQuery(con, query.str.dong)

### type 변환
dong_apt_price_all$거래시점 <- as_datetime(dong_apt_price_all$거래시점)

### 선 그래프
dong_area <- ggplot(dong_apt_price_all, aes(x=거래시점, y=평당평균거래가, color = 동이름)) +
  geom_line(stat="identity", size= 1.25)+
  labs(title = '강남구 동별 평당 평균거래가') +
  theme(axis.text.x = element_text(colour="grey20", size=12, hjust=.5, vjust=.5),
          axis.text.y = element_text(colour="grey20", size=12, hjust=.5, vjust=.5),
          text=element_text(size=15,face='bold'),
          plot.title = element_text(hjust = 0.5,size=20,face='bold'))
gn_dong_apt_price_area <- ggplotly(dong_area)

### 그래프 저장
htmlwidgets::saveWidget(gn_dong_apt_price_area,"./team_df/gn_dong_apt_price_area.html", selfcontained = F)

### 실행 - cmd 
# 1) 파일 위치 => cd C:\Apache24\htdocs\team
# 2) Rscript 위치 + R파일 => "C:/Program Files/R/R-4.2.2/bin/Rscript.exe" gn_dong_area.R

