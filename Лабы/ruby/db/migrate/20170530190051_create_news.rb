class CreateNews < ActiveRecord::Migration
  def change
    create_table :news do |t|
      t.string :name
      t.string :about
      t.string :fullnews
      t.string :site

      t.timestamps null: false
    end
  end
end
