markdown = Redcarpet::Markdown.new(Redcarpet::Render::HTML,
        :autolink => true, :space_after_headers => true)


markdown.render("Simple jquery to add markers to static images.")
