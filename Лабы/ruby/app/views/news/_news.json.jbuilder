json.extract! news, :id, :name, :about, :fullnews, :site, :created_at, :updated_at
json.url news_url(news, format: :json)