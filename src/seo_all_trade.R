### 서초구 전체 평균거래금액 그래프

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
# DB:table(seo_price_flow) -> R:dataframe
query.str.all <- paste("select * from seo_price_flow ", sep="")
seo_apt_price <- dbGetQuery(con, query.str.all)


### type 변환
seo_apt_price$날짜 <- as_datetime(seo_apt_price$날짜)

### 선 그래프
avg_trade <- ggplot(seo_apt_price, aes(x = 날짜, y = 평균거래금액)) +
  geom_line(color = 'red', size= 1.25)+
  labs(title = '서초구 전체 평균 거래금액') +
  theme(axis.text.x = element_text(colour="grey20", size=12, hjust=.5, vjust=.5),
          axis.text.y = element_text(colour="grey20", size=12, hjust=.5, vjust=.5),
          text=element_text(size=15,face='bold'),
          plot.title = element_text(hjust = 0.5,size=20,face='bold'))
seo_price <- ggplotly(avg_trade)

### 그래프 저장
htmlwidgets::saveWidget(seo_price,"./team_df/seo_price.html", selfcontained = F)


### 실행 - cmd 
# 1) 파일 위치 => cd C:\Apache24\htdocs\team
# 2) Rscript 위치 + R파일 => "C:/Program Files/R/R-4.2.2/bin/Rscript.exe" seo_all_trade.R